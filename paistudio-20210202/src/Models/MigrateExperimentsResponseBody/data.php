<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\MigrateExperimentsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $alreadyExists;

    /**
     * @example draft-8u3ck2or5pw2i4auhf
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example true
     *
     * @var bool
     */
    public $updated;
    protected $_name = [
        'alreadyExists' => 'AlreadyExists',
        'experimentId'  => 'ExperimentId',
        'updated'       => 'Updated',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
