<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
        'clusterType' => 'clusterType',
        'profile' => 'profile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
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
        if (isset($map['acceptLanguage'])) {
            $model->acceptLanguage = $map['acceptLanguage'];
        }

        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }

        return $model;
    }
}
