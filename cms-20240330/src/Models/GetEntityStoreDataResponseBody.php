<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class GetEntityStoreDataResponseBody extends Model
{
    /**
     * @var string[][]
     */
    public $data;

    /**
     * @var string[]
     */
    public $header;

    /**
     * @example 264C3E89-XXXX-XXXX-XXXX-CE9C2196C7DC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'data',
        'header' => 'header',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->header) {
            $res['header'] = $this->header;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEntityStoreDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = $map['data'];
            }
        }
        if (isset($map['header'])) {
            if (!empty($map['header'])) {
                $model->header = $map['header'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
