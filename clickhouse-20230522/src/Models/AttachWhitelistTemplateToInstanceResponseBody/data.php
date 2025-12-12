<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\AttachWhitelistTemplateToInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\AttachWhitelistTemplateToInstanceResponseBody\data\attachFailList;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\AttachWhitelistTemplateToInstanceResponseBody\data\attachSuccessedList;

class data extends Model
{
    /**
     * @var attachFailList[]
     */
    public $attachFailList;

    /**
     * @var attachSuccessedList[]
     */
    public $attachSuccessedList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'attachFailList' => 'AttachFailList',
        'attachSuccessedList' => 'AttachSuccessedList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->attachFailList)) {
            Model::validateArray($this->attachFailList);
        }
        if (\is_array($this->attachSuccessedList)) {
            Model::validateArray($this->attachSuccessedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachFailList) {
            if (\is_array($this->attachFailList)) {
                $res['AttachFailList'] = [];
                $n1 = 0;
                foreach ($this->attachFailList as $item1) {
                    $res['AttachFailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attachSuccessedList) {
            if (\is_array($this->attachSuccessedList)) {
                $res['AttachSuccessedList'] = [];
                $n1 = 0;
                foreach ($this->attachSuccessedList as $item1) {
                    $res['AttachSuccessedList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttachFailList'])) {
            if (!empty($map['AttachFailList'])) {
                $model->attachFailList = [];
                $n1 = 0;
                foreach ($map['AttachFailList'] as $item1) {
                    $model->attachFailList[$n1] = attachFailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AttachSuccessedList'])) {
            if (!empty($map['AttachSuccessedList'])) {
                $model->attachSuccessedList = [];
                $n1 = 0;
                foreach ($map['AttachSuccessedList'] as $item1) {
                    $model->attachSuccessedList[$n1] = attachSuccessedList::fromMap($item1);
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
