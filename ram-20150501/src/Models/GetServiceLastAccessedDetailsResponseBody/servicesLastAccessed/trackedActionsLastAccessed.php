<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody\servicesLastAccessed;

use AlibabaCloud\Dara\Model;

class trackedActionsLastAccessed extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $lastAccessedEntity;

    /**
     * @var string
     */
    public $lastAccessedTime;

    /**
     * @var string[]
     */
    public $serviceCodes;
    protected $_name = [
        'actionName' => 'ActionName',
        'lastAccessedEntity' => 'LastAccessedEntity',
        'lastAccessedTime' => 'LastAccessedTime',
        'serviceCodes' => 'ServiceCodes',
    ];

    public function validate()
    {
        if (\is_array($this->serviceCodes)) {
            Model::validateArray($this->serviceCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->lastAccessedEntity) {
            $res['LastAccessedEntity'] = $this->lastAccessedEntity;
        }

        if (null !== $this->lastAccessedTime) {
            $res['LastAccessedTime'] = $this->lastAccessedTime;
        }

        if (null !== $this->serviceCodes) {
            if (\is_array($this->serviceCodes)) {
                $res['ServiceCodes'] = [];
                $n1 = 0;
                foreach ($this->serviceCodes as $item1) {
                    $res['ServiceCodes'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['LastAccessedEntity'])) {
            $model->lastAccessedEntity = $map['LastAccessedEntity'];
        }

        if (isset($map['LastAccessedTime'])) {
            $model->lastAccessedTime = $map['LastAccessedTime'];
        }

        if (isset($map['ServiceCodes'])) {
            if (!empty($map['ServiceCodes'])) {
                $model->serviceCodes = [];
                $n1 = 0;
                foreach ($map['ServiceCodes'] as $item1) {
                    $model->serviceCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
