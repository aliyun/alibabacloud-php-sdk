<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomOrgRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'corpId' => 'corpId',
        'corpName' => 'corpName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corpName'] = $this->corpName;
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['corpName'])) {
            $model->corpName = $map['corpName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
