<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class PostInnerConvertRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $sqlConvertMap;

    /**
     * @var string
     */
    public $srcDataSourceName;

    /**
     * @var string
     */
    public $tgtDataSourceName;
    protected $_name = [
        'sqlConvertMap' => 'sqlConvertMap',
        'srcDataSourceName' => 'srcDataSourceName',
        'tgtDataSourceName' => 'tgtDataSourceName',
    ];

    public function validate()
    {
        if (\is_array($this->sqlConvertMap)) {
            Model::validateArray($this->sqlConvertMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sqlConvertMap) {
            if (\is_array($this->sqlConvertMap)) {
                $res['sqlConvertMap'] = [];
                foreach ($this->sqlConvertMap as $key1 => $value1) {
                    $res['sqlConvertMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->srcDataSourceName) {
            $res['srcDataSourceName'] = $this->srcDataSourceName;
        }

        if (null !== $this->tgtDataSourceName) {
            $res['tgtDataSourceName'] = $this->tgtDataSourceName;
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
        if (isset($map['sqlConvertMap'])) {
            if (!empty($map['sqlConvertMap'])) {
                $model->sqlConvertMap = [];
                foreach ($map['sqlConvertMap'] as $key1 => $value1) {
                    $model->sqlConvertMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['srcDataSourceName'])) {
            $model->srcDataSourceName = $map['srcDataSourceName'];
        }

        if (isset($map['tgtDataSourceName'])) {
            $model->tgtDataSourceName = $map['tgtDataSourceName'];
        }

        return $model;
    }
}
