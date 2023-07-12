<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigRequest;

use AlibabaCloud\Tea\Model;

class deviceConfigs extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'content' => 'Content',
        'iotId'   => 'IotId',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('iotId', $this->iotId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
