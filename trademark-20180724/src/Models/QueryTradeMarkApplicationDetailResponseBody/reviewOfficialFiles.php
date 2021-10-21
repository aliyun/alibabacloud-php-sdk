<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\reviewOfficialFiles\reviewSupplements;
use AlibabaCloud\Tea\Model;

class reviewOfficialFiles extends Model
{
    /**
     * @var string
     */
    public $reviewKeep;

    /**
     * @var string
     */
    public $reviewAudit;

    /**
     * @var string
     */
    public $reviewPart;

    /**
     * @var string
     */
    public $reviewPass;

    /**
     * @var reviewSupplements
     */
    public $reviewSupplements;
    protected $_name = [
        'reviewKeep'        => 'ReviewKeep',
        'reviewAudit'       => 'ReviewAudit',
        'reviewPart'        => 'ReviewPart',
        'reviewPass'        => 'ReviewPass',
        'reviewSupplements' => 'ReviewSupplements',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewKeep) {
            $res['ReviewKeep'] = $this->reviewKeep;
        }
        if (null !== $this->reviewAudit) {
            $res['ReviewAudit'] = $this->reviewAudit;
        }
        if (null !== $this->reviewPart) {
            $res['ReviewPart'] = $this->reviewPart;
        }
        if (null !== $this->reviewPass) {
            $res['ReviewPass'] = $this->reviewPass;
        }
        if (null !== $this->reviewSupplements) {
            $res['ReviewSupplements'] = null !== $this->reviewSupplements ? $this->reviewSupplements->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewOfficialFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewKeep'])) {
            $model->reviewKeep = $map['ReviewKeep'];
        }
        if (isset($map['ReviewAudit'])) {
            $model->reviewAudit = $map['ReviewAudit'];
        }
        if (isset($map['ReviewPart'])) {
            $model->reviewPart = $map['ReviewPart'];
        }
        if (isset($map['ReviewPass'])) {
            $model->reviewPass = $map['ReviewPass'];
        }
        if (isset($map['ReviewSupplements'])) {
            $model->reviewSupplements = reviewSupplements::fromMap($map['ReviewSupplements']);
        }

        return $model;
    }
}
