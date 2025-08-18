<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody\instanceRelationList;

use AlibabaCloud\Dara\Model;

class fieldInstanceList extends Model
{
    /**
     * @var string
     */
    public $fieldInstanceId;

    /**
     * @var string
     */
    public $runStatus;

    /**
     * @var string
     */
    public $selectStatus;
    protected $_name = [
        'fieldInstanceId' => 'FieldInstanceId',
        'runStatus' => 'RunStatus',
        'selectStatus' => 'SelectStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldInstanceId) {
            $res['FieldInstanceId'] = $this->fieldInstanceId;
        }

        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
        }

        if (null !== $this->selectStatus) {
            $res['SelectStatus'] = $this->selectStatus;
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
        if (isset($map['FieldInstanceId'])) {
            $model->fieldInstanceId = $map['FieldInstanceId'];
        }

        if (isset($map['RunStatus'])) {
            $model->runStatus = $map['RunStatus'];
        }

        if (isset($map['SelectStatus'])) {
            $model->selectStatus = $map['SelectStatus'];
        }

        return $model;
    }
}
