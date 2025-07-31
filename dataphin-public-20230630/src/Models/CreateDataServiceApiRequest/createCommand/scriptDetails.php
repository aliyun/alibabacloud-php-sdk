<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails\scriptResponseParameters;
use AlibabaCloud\Tea\Model;

class scriptDetails extends Model
{
    /**
     * @example 6668888888888812345L
     *
     * @var int
     */
    public $datasourceID;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $datasourceType;

    /**
     * @example false
     *
     * @var bool
     */
    public $isPaginated;

    /**
     * @description This parameter is required.
     *
     * @example select a,b,c from table1 where d = ${d}
     *
     * @var string
     */
    public $script;

    /**
     * @description This parameter is required.
     *
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;

    /**
     * @description This parameter is required.
     *
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;

    /**
     * @example 2
     *
     * @var int
     */
    public $sortPriority;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $sqlMode;
    protected $_name = [
        'datasourceID' => 'DatasourceID',
        'datasourceType' => 'DatasourceType',
        'isPaginated' => 'IsPaginated',
        'script' => 'Script',
        'scriptRequestParameters' => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
        'sortPriority' => 'SortPriority',
        'sqlMode' => 'SqlMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasourceID) {
            $res['DatasourceID'] = $this->datasourceID;
        }
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }
        if (null !== $this->isPaginated) {
            $res['IsPaginated'] = $this->isPaginated;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptRequestParameters) {
            $res['ScriptRequestParameters'] = [];
            if (null !== $this->scriptRequestParameters && \is_array($this->scriptRequestParameters)) {
                $n = 0;
                foreach ($this->scriptRequestParameters as $item) {
                    $res['ScriptRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptResponseParameters) {
            $res['ScriptResponseParameters'] = [];
            if (null !== $this->scriptResponseParameters && \is_array($this->scriptResponseParameters)) {
                $n = 0;
                foreach ($this->scriptResponseParameters as $item) {
                    $res['ScriptResponseParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sortPriority) {
            $res['SortPriority'] = $this->sortPriority;
        }
        if (null !== $this->sqlMode) {
            $res['SqlMode'] = $this->sqlMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasourceID'])) {
            $model->datasourceID = $map['DatasourceID'];
        }
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }
        if (isset($map['IsPaginated'])) {
            $model->isPaginated = $map['IsPaginated'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptRequestParameters'])) {
            if (!empty($map['ScriptRequestParameters'])) {
                $model->scriptRequestParameters = [];
                $n = 0;
                foreach ($map['ScriptRequestParameters'] as $item) {
                    $model->scriptRequestParameters[$n++] = null !== $item ? scriptRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n = 0;
                foreach ($map['ScriptResponseParameters'] as $item) {
                    $model->scriptResponseParameters[$n++] = null !== $item ? scriptResponseParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SortPriority'])) {
            $model->sortPriority = $map['SortPriority'];
        }
        if (isset($map['SqlMode'])) {
            $model->sqlMode = $map['SqlMode'];
        }

        return $model;
    }
}
