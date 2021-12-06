<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateInlinePolicyForAccessConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $inlinePolicyName;

    /**
     * @var string
     */
    public $newInlinePolicyDocument;
    protected $_name = [
        'accessConfigurationId'   => 'AccessConfigurationId',
        'directoryId'             => 'DirectoryId',
        'inlinePolicyName'        => 'InlinePolicyName',
        'newInlinePolicyDocument' => 'NewInlinePolicyDocument',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->inlinePolicyName) {
            $res['InlinePolicyName'] = $this->inlinePolicyName;
        }
        if (null !== $this->newInlinePolicyDocument) {
            $res['NewInlinePolicyDocument'] = $this->newInlinePolicyDocument;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInlinePolicyForAccessConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['InlinePolicyName'])) {
            $model->inlinePolicyName = $map['InlinePolicyName'];
        }
        if (isset($map['NewInlinePolicyDocument'])) {
            $model->newInlinePolicyDocument = $map['NewInlinePolicyDocument'];
        }

        return $model;
    }
}
