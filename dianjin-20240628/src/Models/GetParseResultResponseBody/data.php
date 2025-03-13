<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example pdf
     *
     * @var string
     */
    public $fileType;

    /**
     * @example null
     *
     * @var string
     */
    public $providerType;

    /**
     * @example b0a202e2-5031-4589-a6d7-39185f0d8d01
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {
     * "Status": "Success",
     * "Data": {},
     * "Message": null,
     * "TaskId": "docmind-20240601-123abc"
     * }
     *
     * @var mixed[]
     */
    public $result;

    /**
     * @var string
     */
    public $resultUrl;

    /**
     * @example WaitRefresh
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileType' => 'fileType',
        'providerType' => 'providerType',
        'requestId' => 'requestId',
        'result' => 'result',
        'resultUrl' => 'resultUrl',
        'status' => 'status',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->providerType) {
            $res['providerType'] = $this->providerType;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->resultUrl) {
            $res['resultUrl'] = $this->resultUrl;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['providerType'])) {
            $model->providerType = $map['providerType'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['resultUrl'])) {
            $model->resultUrl = $map['resultUrl'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
