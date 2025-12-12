<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\AttachWhitelistTemplateToInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\AttachWhitelistTemplateToInstanceResponseBody\data\attachSuccessedList\templates;

class attachSuccessedList extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'templates' => 'Templates',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['Templates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['Templates'] as $item1) {
                    $model->templates[$n1] = templates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
