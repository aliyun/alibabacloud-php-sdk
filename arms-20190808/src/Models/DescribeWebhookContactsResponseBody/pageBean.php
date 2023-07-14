<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody\pageBean\webhookContacts;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of alert contacts displayed on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The total number of alert contacts.
     *
     * @example 1
     *
     * @var int
     */
    public $total;

    /**
     * @description The list of webhook alert contacts.
     *
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
    }

    public function toMap()
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
            $res['WebhookContacts'] = [];
            if (null !== $this->webhookContacts && \is_array($this->webhookContacts)) {
                $n = 0;
                foreach ($this->webhookContacts as $item) {
                    $res['WebhookContacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
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
                $n                      = 0;
                foreach ($map['WebhookContacts'] as $item) {
                    $model->webhookContacts[$n++] = null !== $item ? webhookContacts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
