<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListAgenticSecurityPoliciesRequest extends Model
{
    /**
     * @var bool
     */
    public $includeArchived;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'includeArchived' => 'IncludeArchived',
        'page' => 'Page',
        'policyStatus' => 'PolicyStatus',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeArchived) {
            $res['IncludeArchived'] = $this->includeArchived;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['IncludeArchived'])) {
            $model->includeArchived = $map['IncludeArchived'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
