<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTeamInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $teamName;
    protected $_name = [
        'description' => 'description',
        'resourceGroupID' => 'resourceGroupID',
        'teamName' => 'teamName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        return $model;
    }
}
