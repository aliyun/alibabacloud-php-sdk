<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody\data\checkDetailList\blockRule;

class checkDetailList extends Model
{
    /**
     * @var blockRule[]
     */
    public $blockRule;

    /**
     * @var string
     */
    public $checkholdReason;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $picInfo;

    /**
     * @var string
     */
    public $riskExplain;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'blockRule' => 'BlockRule',
        'checkholdReason' => 'CheckholdReason',
        'desc' => 'Desc',
        'picInfo' => 'PicInfo',
        'riskExplain' => 'RiskExplain',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->blockRule)) {
            Model::validateArray($this->blockRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockRule) {
            if (\is_array($this->blockRule)) {
                $res['BlockRule'] = [];
                $n1 = 0;
                foreach ($this->blockRule as $item1) {
                    $res['BlockRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkholdReason) {
            $res['CheckholdReason'] = $this->checkholdReason;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->picInfo) {
            $res['PicInfo'] = $this->picInfo;
        }

        if (null !== $this->riskExplain) {
            $res['RiskExplain'] = $this->riskExplain;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['BlockRule'])) {
            if (!empty($map['BlockRule'])) {
                $model->blockRule = [];
                $n1 = 0;
                foreach ($map['BlockRule'] as $item1) {
                    $model->blockRule[$n1] = blockRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckholdReason'])) {
            $model->checkholdReason = $map['CheckholdReason'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['PicInfo'])) {
            $model->picInfo = $map['PicInfo'];
        }

        if (isset($map['RiskExplain'])) {
            $model->riskExplain = $map['RiskExplain'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
