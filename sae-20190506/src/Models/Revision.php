<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class Revision extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var RevisionConfig
     */
    public $revisionConfig;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var float
     */
    public $weight;
    protected $_name = [
        'createdTime'    => 'CreatedTime',
        'description'    => 'Description',
        'revisionConfig' => 'RevisionConfig',
        'revisionId'     => 'RevisionId',
        'weight'         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->revisionConfig) {
            $res['RevisionConfig'] = null !== $this->revisionConfig ? $this->revisionConfig->toMap() : null;
        }
        if (null !== $this->revisionId) {
            $res['RevisionId'] = $this->revisionId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Revision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RevisionConfig'])) {
            $model->revisionConfig = RevisionConfig::fromMap($map['RevisionConfig']);
        }
        if (isset($map['RevisionId'])) {
            $model->revisionId = $map['RevisionId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
