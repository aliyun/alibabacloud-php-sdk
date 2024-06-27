<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class UploadDocumentAsyncAdvanceRequest extends Model
{
    /**
     * @description The size of data that is overlapped between consecutive chunks. The maximum value of this parameter cannot be greater than the value of the ChunkSize parameter.
     *
     * >  This parameter is used to prevent context missing that may occur due to data truncation. For example, when you upload a long text, you can retain specific overlapped text content between consecutive chunks to better understand the context.
     * @example 50
     *
     * @var int
     */
    public $chunkOverlap;

    /**
     * @example 250
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @description This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description This parameter is required.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the document loader. You do not need to specify this parameter. A document loader is automatically specified based on the file extension. Valid values:
     *
     *   UnstructuredHTMLLoader: `.html`
     *   UnstructuredMarkdownLoader: `.md`
     *   PyMuPDFLoader: `.pdf`
     *   PyPDFLoader: `.pdf`
     *   RapidOCRPDFLoader: `.pdf`
     *   PDFWithImageRefLoader: `.pdf` (with the text-image association feature)
     *   JSONLoader: `.json`
     *   CSVLoader: `.csv`
     *   RapidOCRLoader: `.png`, `.jpg`, `.jpeg`, and `.bmp`
     *   UnstructuredFileLoader: `.eml`, `.msg`, `.rst`, `.txt`, `.docx`, `.epub`, `.odt`, `.pptx`, and `.tsv`
     *
     * @example PyMuPDFLoader
     *
     * @var string
     */
    public $documentLoaderName;

    /**
     * @description Specifies whether to perform only document understanding and chunking, but not vectorization and storage. Default value: false.
     *
     * >  You can set this parameter to true, check the chunking effect, and then perform optimization if needed.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The file name of the document.
     *
     * >
     *
     *   We recommend that you add an extension to the file name. Examples: `.json`, `.md`, and `.pdf`. If you do not add an extension, the default loader designed for unstructured data is used.
     *
     *   If an image file is involved, the file name must contain an extension. The following extensions are supported: `.bmp`, `.jpg`, `.jpeg`, `.png`, and `.tiff`.
     *
     *   You can use a compressed package to upload images. The package file name must contain an extension. Supported package file extensions: `.tar`, `.gz`, and `.zip`.
     *
     * This parameter is required.
     * @example mydoc.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example https://xx/mydoc.txt
     *
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @description The metadata. The value of this parameter must be the same as the Metadata parameter that is specified when you call the CreateDocumentCollection operation.
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example testpassword
     *
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The separators that are used to split large amounts of data.
     *
     * >
     *
     *   This is an important parameter that determines the chunking effect. This parameter is related to the splitter that is specified by the TextSplitterName parameter.
     *
     *   In most cases, you do not need to specify this parameter. The server assigns separators based on the value of the TextSplitterName parameter.
     *
     * @var string[]
     */
    public $separators;

    /**
     * @description The name of the splitter. Valid values:
     *
     *   **ChineseRecursiveTextSplitter**: inherits from RecursiveCharacterTextSplitter, uses `["\\n\\n","\\n", "。|!|?", "\\.\\s|\\!\\s|\\?\\s", ";|;\\s", ",|,\\s"]` as separators by default, and uses regular expressions to match text.
     *   **RecursiveCharacterTextSplitter**: uses `["\\n\\n", "\\n", " ", ""]` as separators by default. The splitter supports splitting code in languages such as `C++, Go, Java, JS, PHP, Proto, Python, RST, Ruby, Rust, Scala, Swift, Markdown, LaTeX, HTML, Sol, and C Sharp`.
     *   **SpacyTextSplitter**: uses `\\n\\n` as separators by default and uses the en_core_web_sm model of spaCy. The splitter can obtain better splitting effect.
     *   **MarkdownHeaderTextSplitter**: splits text in the `[("#", "head1"), ("##", "head2"), ("###", "head3"), ("####", "head4")]` format. The splitter is suitable for Markdown text.
     *
     * @example ChineseRecursiveTextSplitter
     *
     * @var string
     */
    public $textSplitterName;

    /**
     * @description Specifies whether to enable title enhancement.
     *
     * >  You can determine the title text, mark the text in the metadata, and then combine the text with the upper-level title to implement text enhancement.
     * @example false
     *
     * @var bool
     */
    public $zhTitleEnhance;
    protected $_name = [
        'chunkOverlap'       => 'ChunkOverlap',
        'chunkSize'          => 'ChunkSize',
        'collection'         => 'Collection',
        'DBInstanceId'       => 'DBInstanceId',
        'documentLoaderName' => 'DocumentLoaderName',
        'dryRun'             => 'DryRun',
        'fileName'           => 'FileName',
        'fileUrlObject'      => 'FileUrl',
        'metadata'           => 'Metadata',
        'namespace'          => 'Namespace',
        'namespacePassword'  => 'NamespacePassword',
        'ownerId'            => 'OwnerId',
        'regionId'           => 'RegionId',
        'separators'         => 'Separators',
        'textSplitterName'   => 'TextSplitterName',
        'zhTitleEnhance'     => 'ZhTitleEnhance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkOverlap) {
            $res['ChunkOverlap'] = $this->chunkOverlap;
        }
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->documentLoaderName) {
            $res['DocumentLoaderName'] = $this->documentLoaderName;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->separators) {
            $res['Separators'] = $this->separators;
        }
        if (null !== $this->textSplitterName) {
            $res['TextSplitterName'] = $this->textSplitterName;
        }
        if (null !== $this->zhTitleEnhance) {
            $res['ZhTitleEnhance'] = $this->zhTitleEnhance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDocumentAsyncAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChunkOverlap'])) {
            $model->chunkOverlap = $map['ChunkOverlap'];
        }
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DocumentLoaderName'])) {
            $model->documentLoaderName = $map['DocumentLoaderName'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Separators'])) {
            if (!empty($map['Separators'])) {
                $model->separators = $map['Separators'];
            }
        }
        if (isset($map['TextSplitterName'])) {
            $model->textSplitterName = $map['TextSplitterName'];
        }
        if (isset($map['ZhTitleEnhance'])) {
            $model->zhTitleEnhance = $map['ZhTitleEnhance'];
        }

        return $model;
    }
}
