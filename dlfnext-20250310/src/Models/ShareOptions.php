<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ShareOptions extends Model
{
    /**
     * @var int
     */
    public $catalogSizeLimit;

    /**
     * @var int
     */
    public $receiverSizeLimit;

    /**
     * @var int
     */
    public $shareResourceSizeLimit;

    /**
     * @var int
     */
    public $shareSizeLimit;
    protected $_name = [
        'catalogSizeLimit' => 'catalogSizeLimit',
        'receiverSizeLimit' => 'receiverSizeLimit',
        'shareResourceSizeLimit' => 'shareResourceSizeLimit',
        'shareSizeLimit' => 'shareSizeLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogSizeLimit) {
            $res['catalogSizeLimit'] = $this->catalogSizeLimit;
        }

        if (null !== $this->receiverSizeLimit) {
            $res['receiverSizeLimit'] = $this->receiverSizeLimit;
        }

        if (null !== $this->shareResourceSizeLimit) {
            $res['shareResourceSizeLimit'] = $this->shareResourceSizeLimit;
        }

        if (null !== $this->shareSizeLimit) {
            $res['shareSizeLimit'] = $this->shareSizeLimit;
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
        if (isset($map['catalogSizeLimit'])) {
            $model->catalogSizeLimit = $map['catalogSizeLimit'];
        }

        if (isset($map['receiverSizeLimit'])) {
            $model->receiverSizeLimit = $map['receiverSizeLimit'];
        }

        if (isset($map['shareResourceSizeLimit'])) {
            $model->shareResourceSizeLimit = $map['shareResourceSizeLimit'];
        }

        if (isset($map['shareSizeLimit'])) {
            $model->shareSizeLimit = $map['shareSizeLimit'];
        }

        return $model;
    }
}
