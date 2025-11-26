<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\EventResourceForEventView;

use AlibabaCloud\Dara\Model;

class entity extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var mixed[]
     */
    public $prop;
    protected $_name = [
        'domain' => 'domain',
        'entityId' => 'entityId',
        'entityType' => 'entityType',
        'prop' => 'prop',
    ];

    public function validate()
    {
        if (\is_array($this->prop)) {
            Model::validateArray($this->prop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->prop) {
            if (\is_array($this->prop)) {
                $res['prop'] = [];
                foreach ($this->prop as $key1 => $value1) {
                    $res['prop'][$key1] = $value1;
                }
            }
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['prop'])) {
            if (!empty($map['prop'])) {
                $model->prop = [];
                foreach ($map['prop'] as $key1 => $value1) {
                    $model->prop[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
