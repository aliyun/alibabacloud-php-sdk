<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListScenariosResponseBody;

use AlibabaCloud\Dara\Model;

class scenarioList extends Model
{
    /**
     * @var string
     */
    public $creatorId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $scenarioName;
    protected $_name = [
        'creatorId'    => 'CreatorId',
        'description'  => 'Description',
        'id'           => 'Id',
        'scenarioName' => 'ScenarioName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->scenarioName) {
            $res['ScenarioName'] = $this->scenarioName;
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
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ScenarioName'])) {
            $model->scenarioName = $map['ScenarioName'];
        }

        return $model;
    }
}
