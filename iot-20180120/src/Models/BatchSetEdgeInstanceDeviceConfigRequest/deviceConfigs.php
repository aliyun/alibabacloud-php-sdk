<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigRequest;

use AlibabaCloud\Tea\Model;

class deviceConfigs extends Model
{
    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'iotId'   => 'IotId',
        'content' => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
