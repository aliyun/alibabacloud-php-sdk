<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicCloudIDEEnvConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $trialAccount;

    /**
     * @var string
     */
    public $trialAccountPrivateKey;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'bizid'                  => 'Bizid',
        'name'                   => 'Name',
        'trialAccount'           => 'TrialAccount',
        'trialAccountPrivateKey' => 'TrialAccountPrivateKey',
        'version'                => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->trialAccount) {
            $res['TrialAccount'] = $this->trialAccount;
        }
        if (null !== $this->trialAccountPrivateKey) {
            $res['TrialAccountPrivateKey'] = $this->trialAccountPrivateKey;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TrialAccount'])) {
            $model->trialAccount = $map['TrialAccount'];
        }
        if (isset($map['TrialAccountPrivateKey'])) {
            $model->trialAccountPrivateKey = $map['TrialAccountPrivateKey'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
