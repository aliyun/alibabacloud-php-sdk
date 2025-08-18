<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails\scriptResponseParameters;

class scriptDetails extends Model
{
    /**
     * @var int
     */
    public $datasourceID;

    /**
     * @var int
     */
    public $datasourceType;

    /**
     * @var bool
     */
    public $isPaginated;

    /**
     * @var string
     */
    public $script;

    /**
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;

    /**
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;

    /**
     * @var int
     */
    public $sortPriority;

    /**
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

    public function validate()
    {
        if (\is_array($this->scriptRequestParameters)) {
            Model::validateArray($this->scriptRequestParameters);
        }
        if (\is_array($this->scriptResponseParameters)) {
            Model::validateArray($this->scriptResponseParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scriptRequestParameters)) {
                $res['ScriptRequestParameters'] = [];
                $n1 = 0;
                foreach ($this->scriptRequestParameters as $item1) {
                    $res['ScriptRequestParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scriptResponseParameters) {
            if (\is_array($this->scriptResponseParameters)) {
                $res['ScriptResponseParameters'] = [];
                $n1 = 0;
                foreach ($this->scriptResponseParameters as $item1) {
                    $res['ScriptResponseParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ScriptRequestParameters'] as $item1) {
                    $model->scriptRequestParameters[$n1] = scriptRequestParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n1 = 0;
                foreach ($map['ScriptResponseParameters'] as $item1) {
                    $model->scriptResponseParameters[$n1] = scriptResponseParameters::fromMap($item1);
                    ++$n1;
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
