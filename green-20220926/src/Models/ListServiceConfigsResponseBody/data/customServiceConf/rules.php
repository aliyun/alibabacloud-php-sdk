<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf;

use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules\imageScanRule;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules\textScanRule;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var imageScanRule
     */
    public $imageScanRule;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @var textScanRule
     */
    public $textScanRule;
    protected $_name = [
        'imageScanRule' => 'ImageScanRule',
        'index'         => 'Index',
        'textScanRule'  => 'TextScanRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScanRule) {
            $res['ImageScanRule'] = null !== $this->imageScanRule ? $this->imageScanRule->toMap() : null;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->textScanRule) {
            $res['TextScanRule'] = null !== $this->textScanRule ? $this->textScanRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScanRule'])) {
            $model->imageScanRule = imageScanRule::fromMap($map['ImageScanRule']);
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['TextScanRule'])) {
            $model->textScanRule = textScanRule::fromMap($map['TextScanRule']);
        }

        return $model;
    }
}
