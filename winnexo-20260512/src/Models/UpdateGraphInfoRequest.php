<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateGraphInfoRequest extends Model
{
    /**
     * @var string
     */
    public $businessProfile;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'businessProfile' => 'businessProfile',
        'displayName' => 'displayName',
        'graphName' => 'graphName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessProfile) {
            $res['businessProfile'] = $this->businessProfile;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['businessProfile'])) {
            $model->businessProfile = $map['businessProfile'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
