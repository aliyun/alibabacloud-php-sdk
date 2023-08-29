<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class StorageLayer extends Model
{
    /**
     * @var int
     */
    public $archive;

    /**
     * @var int
     */
    public $coldArchive;

    /**
     * @var int
     */
    public $infrequent;

    /**
     * @var int
     */
    public $standard;

    /**
     * @var int
     */
    public $unknown;
    protected $_name = [
        'archive'     => 'Archive',
        'coldArchive' => 'ColdArchive',
        'infrequent'  => 'Infrequent',
        'standard'    => 'Standard',
        'unknown'     => 'Unknown',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->coldArchive) {
            $res['ColdArchive'] = $this->coldArchive;
        }
        if (null !== $this->infrequent) {
            $res['Infrequent'] = $this->infrequent;
        }
        if (null !== $this->standard) {
            $res['Standard'] = $this->standard;
        }
        if (null !== $this->unknown) {
            $res['Unknown'] = $this->unknown;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StorageLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['ColdArchive'])) {
            $model->coldArchive = $map['ColdArchive'];
        }
        if (isset($map['Infrequent'])) {
            $model->infrequent = $map['Infrequent'];
        }
        if (isset($map['Standard'])) {
            $model->standard = $map['Standard'];
        }
        if (isset($map['Unknown'])) {
            $model->unknown = $map['Unknown'];
        }

        return $model;
    }
}
