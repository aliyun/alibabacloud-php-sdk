<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateWithKeyAutoCreationResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateWithKeyAutoCreationResponseBody\result\downloadPath;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var downloadPath
     */
    public $downloadPath;

    /**
     * @example -----BEGIN ENCRYPTED PRIVATE KEY-----\\nMII***A=\\n-----END ENCRYPTED PRIVATE KEY-----\\n
     *
     * @var string
     */
    public $privateKey;
    protected $_name = [
        'downloadPath' => 'DownloadPath',
        'privateKey'   => 'PrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadPath) {
            $res['DownloadPath'] = null !== $this->downloadPath ? $this->downloadPath->toMap() : null;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadPath'])) {
            $model->downloadPath = downloadPath::fromMap($map['DownloadPath']);
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        return $model;
    }
}
