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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data\subJobs\fileAttr;
use AlibabaCloud\Tea\Model;

class subJobs extends Model
{
    /**
     * @example x\"x\"x\"x
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var fileAttr
     */
    public $fileAttr;

    /**
     * @example oss://default/bucket-name/path-xxx/xxx-1.mp4
     *
     * @var string
     */
    public $fileKey;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $subJobId;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'fileAttr' => 'FileAttr',
        'fileKey' => 'FileKey',
        'status' => 'Status',
        'subJobId' => 'SubJobId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->fileAttr) {
            $res['FileAttr'] = null !== $this->fileAttr ? $this->fileAttr->toMap() : null;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subJobId) {
            $res['SubJobId'] = $this->subJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FileAttr'])) {
            $model->fileAttr = fileAttr::fromMap($map['FileAttr']);
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubJobId'])) {
            $model->subJobId = $map['SubJobId'];
        }

        return $model;
    }
}
