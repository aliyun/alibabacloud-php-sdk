<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SdkGenerateByAppForRegionResponseBody extends Model
{
    /**
     * @example UEsDBBQACAAIADdwnFQAAAAAAAAAAAAAAAA2AAAAQ0FTREtfSkFWQV8xMjI3NDY2NjY0MzM0MTMzXzE2NTExMjU3MD......
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @example CE5722A6-AE78-4741-A9B0-6C817D360510
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'downloadLink' => 'DownloadLink',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SdkGenerateByAppForRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
