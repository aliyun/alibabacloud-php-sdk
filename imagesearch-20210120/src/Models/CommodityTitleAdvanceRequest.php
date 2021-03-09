<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CommodityTitleAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picContentObject;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $titleIndex;
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'instanceName'     => 'InstanceName',
        'titleIndex'       => 'TitleIndex',
    ];

    public function validate()
    {
        Model::validateRequired('picContentObject', $this->picContentObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picContentObject) {
            $res['PicContentObject'] = $this->picContentObject;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->titleIndex) {
            $res['TitleIndex'] = $this->titleIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommodityTitleAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicContentObject'])) {
            $model->picContentObject = $map['PicContentObject'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['TitleIndex'])) {
            $model->titleIndex = $map['TitleIndex'];
        }

        return $model;
    }
}
