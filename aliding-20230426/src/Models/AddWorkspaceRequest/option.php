<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceRequest;

use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example lHiicjNFM2iSFYSdz2iPuI8ZwiEiE
     *
     * @var string
     */
    public $teamId;
    protected $_name = [
        'description' => 'Description',
        'teamId'      => 'TeamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->teamId) {
            $res['TeamId'] = $this->teamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TeamId'])) {
            $model->teamId = $map['TeamId'];
        }

        return $model;
    }
}
