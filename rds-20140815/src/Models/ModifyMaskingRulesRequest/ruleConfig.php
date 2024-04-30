<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyMaskingRulesRequest;

use AlibabaCloud\Tea\Model;

class ruleConfig extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var string[]
     */
    public $databases;

    /**
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'columns'   => 'Columns',
        'databases' => 'Databases',
        'tables'    => 'Tables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
        }
        if (null !== $this->databases) {
            $res['Databases'] = $this->databases;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = $map['Columns'];
            }
        }
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = $map['Databases'];
            }
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }

        return $model;
    }
}
