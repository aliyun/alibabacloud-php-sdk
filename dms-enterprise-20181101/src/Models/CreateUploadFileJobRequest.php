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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadFileJobRequest extends Model
{
    /**
     * @description The name of the attachment file.
     *
     * >  The file name must end with .txt or .sql. For example, the file name can be test.txt or test.sql.
     *
     * This parameter is required.
     *
     * @example test.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The purpose of the attachment file. Valid values:
     *
     *   **datacorrect**: The file is uploaded to change data.
     *   **order_info_attachment**: The file is uploaded as an attachment in a ticket.
     *   **big-file**: The file is uploaded to import multiple data records at a time.
     *   **sqlreview**: The file is uploaded for SQL review.
     *
     * This parameter is required.
     *
     * @example datacorrect
     *
     * @var string
     */
    public $fileSource;

    /**
     * @description The ID of the tenant.
     *
     * >  You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The URL of the attachment file. The URL must be an HTTP URL or an HTTPS URL.
     *
     * >  You can upload the attachment file to an Object Storage Service (OSS) bucket and obtain the URL of the file in the OSS console. For more information, see [Share objects](https://help.aliyun.com/document_detail/195674.html).
     *
     * This parameter is required.
     *
     * @example https://XXX.oss-cn-hangzhou.aliyuncs.com/test.txt
     *
     * @var string
     */
    public $uploadURL;
    protected $_name = [
        'fileName' => 'FileName',
        'fileSource' => 'FileSource',
        'tid' => 'Tid',
        'uploadURL' => 'UploadURL',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSource) {
            $res['FileSource'] = $this->fileSource;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uploadURL) {
            $res['UploadURL'] = $this->uploadURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadFileJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSource'])) {
            $model->fileSource = $map['FileSource'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UploadURL'])) {
            $model->uploadURL = $map['UploadURL'];
        }

        return $model;
    }
}
