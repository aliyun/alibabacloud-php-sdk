<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs\baselineItems;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs\tag;

class inputs extends Model
{
    /**
     * @var string
     */
    public $accountNamePrefix;

    /**
     * @var int
     */
    public $accountUid;

    /**
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var int
     */
    public $payerAccountUid;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'accountNamePrefix' => 'AccountNamePrefix',
        'accountUid' => 'AccountUid',
        'baselineItems' => 'BaselineItems',
        'displayName' => 'DisplayName',
        'folderId' => 'FolderId',
        'payerAccountUid' => 'PayerAccountUid',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->baselineItems)) {
            Model::validateArray($this->baselineItems);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNamePrefix) {
            $res['AccountNamePrefix'] = $this->accountNamePrefix;
        }

        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }

        if (null !== $this->baselineItems) {
            if (\is_array($this->baselineItems)) {
                $res['BaselineItems'] = [];
                $n1 = 0;
                foreach ($this->baselineItems as $item1) {
                    $res['BaselineItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->payerAccountUid) {
            $res['PayerAccountUid'] = $this->payerAccountUid;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountNamePrefix'])) {
            $model->accountNamePrefix = $map['AccountNamePrefix'];
        }

        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }

        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n1 = 0;
                foreach ($map['BaselineItems'] as $item1) {
                    $model->baselineItems[$n1] = baselineItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['PayerAccountUid'])) {
            $model->payerAccountUid = $map['PayerAccountUid'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
