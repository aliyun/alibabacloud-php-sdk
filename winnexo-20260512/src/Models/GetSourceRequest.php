<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetSourceRequest extends Model
{
    /**
     * @var bool
     */
    public $includeDetails;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'includeDetails' => 'includeDetails',
        'sourceId' => 'sourceId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeDetails) {
            $res['includeDetails'] = $this->includeDetails;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
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
        if (isset($map['includeDetails'])) {
            $model->includeDetails = $map['includeDetails'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
