<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class URLList extends Model
{
    /**
     * @example https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/ct_artery_aa_ph/aa/13_1.3.12.2.1107.5.1.4.67018.30000019012009435582900046382.nii.gz
     *
     * @var Stream
     */
    public $URLObject;
    protected $_name = [
        'URLObject' => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URLObject) {
            $res['URL'] = $this->URLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return URLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URL'])) {
            $model->URLObject = $map['URL'];
        }

        return $model;
    }
}
