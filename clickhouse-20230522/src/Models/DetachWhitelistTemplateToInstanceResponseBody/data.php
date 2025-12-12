<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DetachWhitelistTemplateToInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DetachWhitelistTemplateToInstanceResponseBody\data\detachFailList;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DetachWhitelistTemplateToInstanceResponseBody\data\detachSuccessedList;

class data extends Model
{
    /**
     * @var detachFailList[]
     */
    public $detachFailList;

    /**
     * @var detachSuccessedList[]
     */
    public $detachSuccessedList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'detachFailList' => 'DetachFailList',
        'detachSuccessedList' => 'DetachSuccessedList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->detachFailList)) {
            Model::validateArray($this->detachFailList);
        }
        if (\is_array($this->detachSuccessedList)) {
            Model::validateArray($this->detachSuccessedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachFailList) {
            if (\is_array($this->detachFailList)) {
                $res['DetachFailList'] = [];
                $n1 = 0;
                foreach ($this->detachFailList as $item1) {
                    $res['DetachFailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->detachSuccessedList) {
            if (\is_array($this->detachSuccessedList)) {
                $res['DetachSuccessedList'] = [];
                $n1 = 0;
                foreach ($this->detachSuccessedList as $item1) {
                    $res['DetachSuccessedList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DetachFailList'])) {
            if (!empty($map['DetachFailList'])) {
                $model->detachFailList = [];
                $n1 = 0;
                foreach ($map['DetachFailList'] as $item1) {
                    $model->detachFailList[$n1] = detachFailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DetachSuccessedList'])) {
            if (!empty($map['DetachSuccessedList'])) {
                $model->detachSuccessedList = [];
                $n1 = 0;
                foreach ($map['DetachSuccessedList'] as $item1) {
                    $model->detachSuccessedList[$n1] = detachSuccessedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
