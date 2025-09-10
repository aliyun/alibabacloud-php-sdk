<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class PutAnnotationDataRequest extends Model
{
    /**
     * @var string
     */
    public $annotationdataId;

    /**
     * @var MLDataParam
     */
    public $mlDataParam;

    /**
     * @var string[][]
     */
    public $rawLog;
    protected $_name = [
        'annotationdataId' => 'annotationdataId',
        'mlDataParam' => 'mlDataParam',
        'rawLog' => 'rawLog',
    ];

    public function validate()
    {
        if (null !== $this->mlDataParam) {
            $this->mlDataParam->validate();
        }
        if (\is_array($this->rawLog)) {
            Model::validateArray($this->rawLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationdataId) {
            $res['annotationdataId'] = $this->annotationdataId;
        }

        if (null !== $this->mlDataParam) {
            $res['mlDataParam'] = null !== $this->mlDataParam ? $this->mlDataParam->toArray($noStream) : $this->mlDataParam;
        }

        if (null !== $this->rawLog) {
            if (\is_array($this->rawLog)) {
                $res['rawLog'] = [];
                $n1 = 0;
                foreach ($this->rawLog as $item1) {
                    if (\is_array($item1)) {
                        $res['rawLog'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['rawLog'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['annotationdataId'])) {
            $model->annotationdataId = $map['annotationdataId'];
        }

        if (isset($map['mlDataParam'])) {
            $model->mlDataParam = MLDataParam::fromMap($map['mlDataParam']);
        }

        if (isset($map['rawLog'])) {
            if (!empty($map['rawLog'])) {
                $model->rawLog = [];
                $n1 = 0;
                foreach ($map['rawLog'] as $item1) {
                    if (!empty($item1)) {
                        $model->rawLog[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->rawLog[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
