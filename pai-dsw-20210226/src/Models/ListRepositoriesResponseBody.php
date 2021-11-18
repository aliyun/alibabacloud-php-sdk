<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListRepositoriesResponseBody extends Model
{
    /**
     * @var ImageRepository[]
     */
    public $repositories;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'repositories' => 'Repositories',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repositories) {
            $res['Repositories'] = [];
            if (null !== $this->repositories && \is_array($this->repositories)) {
                $n = 0;
                foreach ($this->repositories as $item) {
                    $res['Repositories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepositoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Repositories'])) {
            if (!empty($map['Repositories'])) {
                $model->repositories = [];
                $n                   = 0;
                foreach ($map['Repositories'] as $item) {
                    $model->repositories[$n++] = null !== $item ? ImageRepository::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
