<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody\pageBean\webhookContacts;

class pageBean extends Model
{
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $size;
    /**
     * @var int
     */
    public $total;
    /**
     * @var webhookContacts[]
     */
    public $webhookContacts;
    protected $_name = [
        'page'            => 'Page',
        'size'            => 'Size',
        'total'           => 'Total',
        'webhookContacts' => 'WebhookContacts',
    ];

    public function validate()
    {
        if (\is_array($this->webhookContacts)) {
            Model::validateArray($this->webhookContacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->webhookContacts) {
            if (\is_array($this->webhookContacts)) {
                $res['WebhookContacts'] = [];
                $n1                     = 0;
                foreach ($this->webhookContacts as $item1) {
                    $res['WebhookContacts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['WebhookContacts'])) {
            if (!empty($map['WebhookContacts'])) {
                $model->webhookContacts = [];
                $n1                     = 0;
                foreach ($map['WebhookContacts'] as $item1) {
                    $model->webhookContacts[$n1++] = webhookContacts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
