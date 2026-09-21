<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\policy;

use AlibabaCloud\Dara\Model;

class authorizeAccessPolicyRules extends Model
{
    /**
     * @var string
     */
    public $cidrIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policy;
    protected $_name = [
        'cidrIp' => 'CidrIp',
        'description' => 'Description',
        'policy' => 'Policy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
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
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
