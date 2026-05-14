<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrNodesResponseBody\data;

use AlibabaCloud\Dara\Model;

class ivrNodes extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $frequentlyPath;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ivrId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $statistic;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'frequentlyPath' => 'FrequentlyPath',
        'id' => 'Id',
        'ivrId' => 'IvrId',
        'name' => 'Name',
        'statistic' => 'Statistic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->frequentlyPath) {
            $res['FrequentlyPath'] = $this->frequentlyPath;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ivrId) {
            $res['IvrId'] = $this->ivrId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->statistic) {
            $res['Statistic'] = $this->statistic;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['FrequentlyPath'])) {
            $model->frequentlyPath = $map['FrequentlyPath'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IvrId'])) {
            $model->ivrId = $map['IvrId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Statistic'])) {
            $model->statistic = $map['Statistic'];
        }

        return $model;
    }
}
