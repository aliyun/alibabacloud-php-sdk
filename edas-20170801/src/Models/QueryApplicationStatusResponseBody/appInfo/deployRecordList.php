<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\deployRecordList\deployRecord;

class deployRecordList extends Model
{
    /**
     * @var deployRecord[]
     */
    public $deployRecord;
    protected $_name = [
        'deployRecord' => 'DeployRecord',
    ];

    public function validate()
    {
        if (\is_array($this->deployRecord)) {
            Model::validateArray($this->deployRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployRecord) {
            if (\is_array($this->deployRecord)) {
                $res['DeployRecord'] = [];
                $n1 = 0;
                foreach ($this->deployRecord as $item1) {
                    $res['DeployRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeployRecord'])) {
            if (!empty($map['DeployRecord'])) {
                $model->deployRecord = [];
                $n1 = 0;
                foreach ($map['DeployRecord'] as $item1) {
                    $model->deployRecord[$n1] = deployRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
