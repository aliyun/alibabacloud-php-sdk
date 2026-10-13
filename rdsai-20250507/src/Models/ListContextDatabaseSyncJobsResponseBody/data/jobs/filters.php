<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobsResponseBody\data\jobs;

use AlibabaCloud\Dara\Model;

class filters extends Model
{
    /**
     * @var string[]
     */
    public $exclude;

    /**
     * @var string[]
     */
    public $excludedDocumentIds;

    /**
     * @var string[]
     */
    public $include;

    /**
     * @var int
     */
    public $sizeLimit;

    /**
     * @var string[]
     */
    public $typeAllowlist;
    protected $_name = [
        'exclude' => 'Exclude',
        'excludedDocumentIds' => 'ExcludedDocumentIds',
        'include' => 'Include',
        'sizeLimit' => 'SizeLimit',
        'typeAllowlist' => 'TypeAllowlist',
    ];

    public function validate()
    {
        if (\is_array($this->exclude)) {
            Model::validateArray($this->exclude);
        }
        if (\is_array($this->excludedDocumentIds)) {
            Model::validateArray($this->excludedDocumentIds);
        }
        if (\is_array($this->include)) {
            Model::validateArray($this->include);
        }
        if (\is_array($this->typeAllowlist)) {
            Model::validateArray($this->typeAllowlist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exclude) {
            if (\is_array($this->exclude)) {
                $res['Exclude'] = [];
                $n1 = 0;
                foreach ($this->exclude as $item1) {
                    $res['Exclude'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludedDocumentIds) {
            if (\is_array($this->excludedDocumentIds)) {
                $res['ExcludedDocumentIds'] = [];
                $n1 = 0;
                foreach ($this->excludedDocumentIds as $item1) {
                    $res['ExcludedDocumentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->include) {
            if (\is_array($this->include)) {
                $res['Include'] = [];
                $n1 = 0;
                foreach ($this->include as $item1) {
                    $res['Include'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }

        if (null !== $this->typeAllowlist) {
            if (\is_array($this->typeAllowlist)) {
                $res['TypeAllowlist'] = [];
                $n1 = 0;
                foreach ($this->typeAllowlist as $item1) {
                    $res['TypeAllowlist'][$n1] = $item1;
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
        if (isset($map['Exclude'])) {
            if (!empty($map['Exclude'])) {
                $model->exclude = [];
                $n1 = 0;
                foreach ($map['Exclude'] as $item1) {
                    $model->exclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludedDocumentIds'])) {
            if (!empty($map['ExcludedDocumentIds'])) {
                $model->excludedDocumentIds = [];
                $n1 = 0;
                foreach ($map['ExcludedDocumentIds'] as $item1) {
                    $model->excludedDocumentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Include'])) {
            if (!empty($map['Include'])) {
                $model->include = [];
                $n1 = 0;
                foreach ($map['Include'] as $item1) {
                    $model->include[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        if (isset($map['TypeAllowlist'])) {
            if (!empty($map['TypeAllowlist'])) {
                $model->typeAllowlist = [];
                $n1 = 0;
                foreach ($map['TypeAllowlist'] as $item1) {
                    $model->typeAllowlist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
