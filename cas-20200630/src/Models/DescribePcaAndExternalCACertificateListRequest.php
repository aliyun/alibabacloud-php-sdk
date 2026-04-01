<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class DescribePcaAndExternalCACertificateListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $identifiers;

    /**
     * @var string
     */
    public $keyWord;

    /**
     * @var int
     */
    public $showSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'identifiers' => 'Identifiers',
        'keyWord' => 'KeyWord',
        'showSize' => 'ShowSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->identifiers) {
            $res['Identifiers'] = $this->identifiers;
        }

        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }

        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Identifiers'])) {
            $model->identifiers = $map['Identifiers'];
        }

        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }

        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
