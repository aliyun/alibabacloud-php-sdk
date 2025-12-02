<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules\imageScanRule;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules\textScanRule;

class rules extends Model
{
    /**
     * @var imageScanRule
     */
    public $imageScanRule;

    /**
     * @var int
     */
    public $index;

    /**
     * @var textScanRule
     */
    public $textScanRule;
    protected $_name = [
        'imageScanRule' => 'ImageScanRule',
        'index' => 'Index',
        'textScanRule' => 'TextScanRule',
    ];

    public function validate()
    {
        if (null !== $this->imageScanRule) {
            $this->imageScanRule->validate();
        }
        if (null !== $this->textScanRule) {
            $this->textScanRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageScanRule) {
            $res['ImageScanRule'] = null !== $this->imageScanRule ? $this->imageScanRule->toArray($noStream) : $this->imageScanRule;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->textScanRule) {
            $res['TextScanRule'] = null !== $this->textScanRule ? $this->textScanRule->toArray($noStream) : $this->textScanRule;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
