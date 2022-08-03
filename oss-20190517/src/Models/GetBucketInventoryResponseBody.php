<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInventoryResponseBody\optionalFields;
use AlibabaCloud\Tea\Model;

class GetBucketInventoryResponseBody extends Model
{
    /**
     * @var InventoryDestination
     */
    public $destination;

    /**
     * @var InventoryFilter
     */
    public $filter;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $includedObjectVersions;

    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var optionalFields
     */
    public $optionalFields;

    /**
     * @var InventorySchedule
     */
    public $schedule;
    protected $_name = [
        'destination'            => 'Destination',
        'filter'                 => 'Filter',
        'id'                     => 'Id',
        'includedObjectVersions' => 'IncludedObjectVersions',
        'isEnabled'              => 'IsEnabled',
        'optionalFields'         => 'OptionalFields',
        'schedule'               => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destination) {
            $res['Destination'] = null !== $this->destination ? $this->destination->toMap() : null;
        }
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->includedObjectVersions) {
            $res['IncludedObjectVersions'] = $this->includedObjectVersions;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->optionalFields) {
            $res['OptionalFields'] = null !== $this->optionalFields ? $this->optionalFields->toMap() : null;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketInventoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Destination'])) {
            $model->destination = InventoryDestination::fromMap($map['Destination']);
        }
        if (isset($map['Filter'])) {
            $model->filter = InventoryFilter::fromMap($map['Filter']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncludedObjectVersions'])) {
            $model->includedObjectVersions = $map['IncludedObjectVersions'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['OptionalFields'])) {
            $model->optionalFields = optionalFields::fromMap($map['OptionalFields']);
        }
        if (isset($map['Schedule'])) {
            $model->schedule = InventorySchedule::fromMap($map['Schedule']);
        }

        return $model;
    }
}
