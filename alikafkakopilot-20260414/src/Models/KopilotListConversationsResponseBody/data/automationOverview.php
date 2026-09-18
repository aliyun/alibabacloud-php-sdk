<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\destinationQuota;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\destinations;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\quota;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks;

class automationOverview extends Model
{
    /**
     * @var string
     */
    public $asOf;

    /**
     * @var destinationQuota
     */
    public $destinationQuota;

    /**
     * @var destinations
     */
    public $destinations;

    /**
     * @var string
     */
    public $homeRegion;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var tasks
     */
    public $tasks;
    protected $_name = [
        'asOf' => 'AsOf',
        'destinationQuota' => 'DestinationQuota',
        'destinations' => 'Destinations',
        'homeRegion' => 'HomeRegion',
        'quota' => 'Quota',
        'tasks' => 'Tasks',
    ];

    public function validate()
    {
        if (null !== $this->destinationQuota) {
            $this->destinationQuota->validate();
        }
        if (null !== $this->destinations) {
            $this->destinations->validate();
        }
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        if (null !== $this->tasks) {
            $this->tasks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asOf) {
            $res['AsOf'] = $this->asOf;
        }

        if (null !== $this->destinationQuota) {
            $res['DestinationQuota'] = null !== $this->destinationQuota ? $this->destinationQuota->toArray($noStream) : $this->destinationQuota;
        }

        if (null !== $this->destinations) {
            $res['Destinations'] = null !== $this->destinations ? $this->destinations->toArray($noStream) : $this->destinations;
        }

        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }

        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
        }

        if (null !== $this->tasks) {
            $res['Tasks'] = null !== $this->tasks ? $this->tasks->toArray($noStream) : $this->tasks;
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
        if (isset($map['AsOf'])) {
            $model->asOf = $map['AsOf'];
        }

        if (isset($map['DestinationQuota'])) {
            $model->destinationQuota = destinationQuota::fromMap($map['DestinationQuota']);
        }

        if (isset($map['Destinations'])) {
            $model->destinations = destinations::fromMap($map['Destinations']);
        }

        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }

        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        if (isset($map['Tasks'])) {
            $model->tasks = tasks::fromMap($map['Tasks']);
        }

        return $model;
    }
}
