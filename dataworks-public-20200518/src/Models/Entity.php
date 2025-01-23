<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class Entity extends Model
{
    /**
     * @var mixed[]
     */
    public $entityContent;
    /**
     * @var string
     */
    public $qualifiedName;
    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'entityContent' => 'EntityContent',
        'qualifiedName' => 'QualifiedName',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->entityContent)) {
            Model::validateArray($this->entityContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityContent) {
            if (\is_array($this->entityContent)) {
                $res['EntityContent'] = [];
                foreach ($this->entityContent as $key1 => $value1) {
                    $res['EntityContent'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['EntityContent'])) {
            if (!empty($map['EntityContent'])) {
                $model->entityContent = [];
                foreach ($map['EntityContent'] as $key1 => $value1) {
                    $model->entityContent[$key1] = $value1;
                }
            }
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
