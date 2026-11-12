<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody\plans\tags;

class plans extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $core;

    /**
     * @var int
     */
    public $credits;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $ispType;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $originPrice;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $publicIpNum;

    /**
     * @var string
     */
    public $supportPlatform;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $tokens;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'core' => 'Core',
        'credits' => 'Credits',
        'currency' => 'Currency',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
        'flow' => 'Flow',
        'ispType' => 'IspType',
        'memory' => 'Memory',
        'originPrice' => 'OriginPrice',
        'planId' => 'PlanId',
        'planType' => 'PlanType',
        'publicIpNum' => 'PublicIpNum',
        'supportPlatform' => 'SupportPlatform',
        'tags' => 'Tags',
        'tokens' => 'Tokens',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }

        if (null !== $this->credits) {
            $res['Credits'] = $this->credits;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }

        if (null !== $this->ispType) {
            $res['IspType'] = $this->ispType;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->publicIpNum) {
            $res['PublicIpNum'] = $this->publicIpNum;
        }

        if (null !== $this->supportPlatform) {
            $res['SupportPlatform'] = $this->supportPlatform;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tokens) {
            $res['Tokens'] = $this->tokens;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }

        if (isset($map['Credits'])) {
            $model->credits = $map['Credits'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }

        if (isset($map['IspType'])) {
            $model->ispType = $map['IspType'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['PublicIpNum'])) {
            $model->publicIpNum = $map['PublicIpNum'];
        }

        if (isset($map['SupportPlatform'])) {
            $model->supportPlatform = $map['SupportPlatform'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tokens'])) {
            $model->tokens = $map['Tokens'];
        }

        return $model;
    }
}
