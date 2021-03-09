<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class CommodityTitleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $picContent;

    /**
     * @var int
     */
    public $titleIndex;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'picContent'   => 'PicContent',
        'titleIndex'   => 'TitleIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->titleIndex) {
            $res['TitleIndex'] = $this->titleIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommodityTitleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['TitleIndex'])) {
            $model->titleIndex = $map['TitleIndex'];
        }

        return $model;
    }
}
