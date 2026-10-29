<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;

class UpdateSdnsRuleCategoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientIpRanges;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $rulesShrink;
    protected $_name = [
        'clientIpRanges' => 'ClientIpRanges',
        'id' => 'Id',
        'rulesShrink' => 'Rules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpRanges) {
            $res['ClientIpRanges'] = $this->clientIpRanges;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
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
        if (isset($map['ClientIpRanges'])) {
            $model->clientIpRanges = $map['ClientIpRanges'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        return $model;
    }
}
