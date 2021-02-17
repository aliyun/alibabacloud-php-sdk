<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageLogosResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageLogosResponseBody\logos\logoBoundary;
use AlibabaCloud\Tea\Model;

class logos extends Model
{
    /**
     * @var float
     */
    public $logoConfidence;

    /**
     * @var logoBoundary
     */
    public $logoBoundary;

    /**
     * @var string
     */
    public $logoName;
    protected $_name = [
        'logoConfidence' => 'LogoConfidence',
        'logoBoundary'   => 'LogoBoundary',
        'logoName'       => 'LogoName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoConfidence) {
            $res['LogoConfidence'] = $this->logoConfidence;
        }
        if (null !== $this->logoBoundary) {
            $res['LogoBoundary'] = null !== $this->logoBoundary ? $this->logoBoundary->toMap() : null;
        }
        if (null !== $this->logoName) {
            $res['LogoName'] = $this->logoName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoConfidence'])) {
            $model->logoConfidence = $map['LogoConfidence'];
        }
        if (isset($map['LogoBoundary'])) {
            $model->logoBoundary = logoBoundary::fromMap($map['LogoBoundary']);
        }
        if (isset($map['LogoName'])) {
            $model->logoName = $map['LogoName'];
        }

        return $model;
    }
}
