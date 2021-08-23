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
     * @var string
     */
    public $logoName;

    /**
     * @var logoBoundary
     */
    public $logoBoundary;
    protected $_name = [
        'logoConfidence' => 'LogoConfidence',
        'logoName'       => 'LogoName',
        'logoBoundary'   => 'LogoBoundary',
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
        if (null !== $this->logoName) {
            $res['LogoName'] = $this->logoName;
        }
        if (null !== $this->logoBoundary) {
            $res['LogoBoundary'] = null !== $this->logoBoundary ? $this->logoBoundary->toMap() : null;
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
        if (isset($map['LogoName'])) {
            $model->logoName = $map['LogoName'];
        }
        if (isset($map['LogoBoundary'])) {
            $model->logoBoundary = logoBoundary::fromMap($map['LogoBoundary']);
        }

        return $model;
    }
}
