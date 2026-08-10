<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteDDLRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteDDLRequest\DDLCommand\datasourceId;

class DDLCommand extends Model
{
    /**
     * @var datasourceId
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $ddl;

    /**
     * @var bool
     */
    public $dropTable;
    protected $_name = [
        'datasourceId' => 'DatasourceId',
        'ddl' => 'Ddl',
        'dropTable' => 'DropTable',
    ];

    public function validate()
    {
        if (null !== $this->datasourceId) {
            $this->datasourceId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = null !== $this->datasourceId ? $this->datasourceId->toArray($noStream) : $this->datasourceId;
        }

        if (null !== $this->ddl) {
            $res['Ddl'] = $this->ddl;
        }

        if (null !== $this->dropTable) {
            $res['DropTable'] = $this->dropTable;
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
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = datasourceId::fromMap($map['DatasourceId']);
        }

        if (isset($map['Ddl'])) {
            $model->ddl = $map['Ddl'];
        }

        if (isset($map['DropTable'])) {
            $model->dropTable = $map['DropTable'];
        }

        return $model;
    }
}
