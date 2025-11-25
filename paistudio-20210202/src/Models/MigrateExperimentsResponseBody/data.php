<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\MigrateExperimentsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $alreadyExists;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var bool
     */
    public $updated;
    protected $_name = [
        'alreadyExists' => 'AlreadyExists',
        'experimentId' => 'ExperimentId',
        'updated' => 'Updated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyExists) {
            $res['AlreadyExists'] = $this->alreadyExists;
        }

        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
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
        if (isset($map['AlreadyExists'])) {
            $model->alreadyExists = $map['AlreadyExists'];
        }

        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }

        return $model;
    }
}
