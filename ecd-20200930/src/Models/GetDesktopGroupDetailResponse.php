<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponse\desktops;
use AlibabaCloud\Tea\Model;

class GetDesktopGroupDetailResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var desktops[]
     */
    public $desktops;
    protected $_name = [
        'requestId' => 'RequestId',
        'desktops'  => 'Desktops',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('desktops', $this->desktops, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->desktops) {
            $res['Desktops'] = [];
            if (null !== $this->desktops && \is_array($this->desktops)) {
                $n = 0;
                foreach ($this->desktops as $item) {
                    $res['Desktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDesktopGroupDetailResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Desktops'])) {
            if (!empty($map['Desktops'])) {
                $model->desktops = [];
                $n               = 0;
                foreach ($map['Desktops'] as $item) {
                    $model->desktops[$n++] = null !== $item ? desktops::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
