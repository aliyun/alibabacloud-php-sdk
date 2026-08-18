<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateDomainItemsRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainItems;

    /**
     * @var string
     */
    public $listId;

    /**
     * @var string
     */
    public $listType;
    protected $_name = [
        'domainItems' => 'DomainItems',
        'listId' => 'ListId',
        'listType' => 'ListType',
    ];

    public function validate()
    {
        if (\is_array($this->domainItems)) {
            Model::validateArray($this->domainItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainItems) {
            if (\is_array($this->domainItems)) {
                $res['DomainItems'] = [];
                $n1 = 0;
                foreach ($this->domainItems as $item1) {
                    $res['DomainItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listId) {
            $res['ListId'] = $this->listId;
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
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
        if (isset($map['DomainItems'])) {
            if (!empty($map['DomainItems'])) {
                $model->domainItems = [];
                $n1 = 0;
                foreach ($map['DomainItems'] as $item1) {
                    $model->domainItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListId'])) {
            $model->listId = $map['ListId'];
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        return $model;
    }
}
