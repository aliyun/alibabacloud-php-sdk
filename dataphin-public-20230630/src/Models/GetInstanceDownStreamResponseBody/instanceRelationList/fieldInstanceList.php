<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody\instanceRelationList;

use AlibabaCloud\Tea\Model;

class fieldInstanceList extends Model
{
    /**
     * @example t_23211
     *
     * @var string
     */
    public $fieldInstanceId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $runStatus;

    /**
     * @example OPTIONAL
     *
     * @var string
     */
    public $selectStatus;
    protected $_name = [
        'fieldInstanceId' => 'FieldInstanceId',
        'runStatus' => 'RunStatus',
        'selectStatus' => 'SelectStatus',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return fieldInstanceList
     */
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
